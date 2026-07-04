const express = require('express');
const router = express.Router();
const newsController = require('../controllers/NewsController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', newsController.getAllNewss);
router.get('/:id', newsController.getNewsById);
router.post('/', authMiddleware, uploadFor('news'), newsController.createNews);
router.put('/:id', authMiddleware, uploadFor('news'), newsController.updateNews);
router.delete('/:id', authMiddleware, newsController.deleteNews);

module.exports = router;
