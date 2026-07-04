const express = require('express');
const router = express.Router();
const AuthController = require('../controllers/AuthController');
const authMiddleware = require('../middlewares/authMiddleware');
const { sequelize } = require('../config/database');

router.post('/login', AuthController.login);

// Public: website_controls (about page content)
router.get('/website-controls', async (req, res) => {
  try {
    const [rows] = await sequelize.query(
      "SELECT `key`, `value` FROM website_controls WHERE `key` LIKE '%about%' ORDER BY id ASC"
    );
    res.json({ status: 'success', data: rows });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
});

// Roles list (for team form dropdown)
router.get('/roles', authMiddleware, async (req, res) => {
  try {
    const [rows] = await sequelize.query('SELECT id, name FROM roles ORDER BY id ASC');
    res.json({ status: 'success', data: rows });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
});

// Dashboard stats
router.get('/dashboard-stats', authMiddleware, async (req, res) => {
  try {
    const tables = ['blogs', 'teams', 'portfolios', 'clients', 'industries', 'news', 'events', 'faqs', 'contacts', 'subscribes', 'testimonials'];
    const counts = {};
    for (const table of tables) {
      const [rows] = await sequelize.query(`SELECT COUNT(*) as count FROM ${table}`);
      counts[table] = rows[0].count;
    }
    res.json({ status: 'success', data: counts });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
});

module.exports = router;
