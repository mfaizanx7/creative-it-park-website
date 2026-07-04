const express = require('express');
const router = express.Router();
const portfolioController = require('../controllers/PortfolioController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', portfolioController.getAllPortfolios);
router.get('/:id', portfolioController.getPortfolioById);
router.post('/', authMiddleware, uploadFor('portfolio'), portfolioController.createPortfolio);
router.put('/:id', authMiddleware, uploadFor('portfolio'), portfolioController.updatePortfolio);
router.delete('/:id', authMiddleware, portfolioController.deletePortfolio);

module.exports = router;
