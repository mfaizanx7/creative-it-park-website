const express = require('express');
const router = express.Router();
const eventController = require('../controllers/EventController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', eventController.getAllEvents);
router.get('/:id', eventController.getEventById);
router.post('/', authMiddleware, uploadFor('events'), eventController.createEvent);
router.put('/:id', authMiddleware, uploadFor('events'), eventController.updateEvent);
router.delete('/:id', authMiddleware, eventController.deleteEvent);

module.exports = router;
