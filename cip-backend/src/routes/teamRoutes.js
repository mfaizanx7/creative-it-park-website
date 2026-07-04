const express = require('express');
const router = express.Router();
const teamController = require('../controllers/TeamController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', teamController.getAllTeams);
router.get('/:id', teamController.getTeamById);
router.post('/', authMiddleware, uploadFor('team'), teamController.createTeam);
router.put('/:id', authMiddleware, uploadFor('team'), teamController.updateTeam);
router.delete('/:id', authMiddleware, teamController.deleteTeam);
router.patch('/:id/toggle-status', authMiddleware, teamController.toggleStatus);

module.exports = router;
