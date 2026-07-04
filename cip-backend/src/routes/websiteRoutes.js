const express = require('express');
const router = express.Router();
const controller = require('../controllers/WebsiteController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', controller.getAll);
router.get('/:id', controller.getById);
router.post('/', authMiddleware, uploadFor('website', 'icon'), controller.create);
router.put('/:id', authMiddleware, uploadFor('website', 'icon'), controller.update);
router.delete('/:id', authMiddleware, controller.delete);

module.exports = router;
