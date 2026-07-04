const express = require('express');
const router = express.Router();
const subscribeController = require('../controllers/SubscribeController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', subscribeController.getAllSubscribes);
router.get('/:id', subscribeController.getSubscribeById);
router.post('/', subscribeController.createSubscribe);
router.put('/:id', authMiddleware, subscribeController.updateSubscribe);
router.delete('/:id', authMiddleware, subscribeController.deleteSubscribe);

module.exports = router;
