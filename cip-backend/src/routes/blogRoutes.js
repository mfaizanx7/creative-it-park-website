const express = require('express');
const router = express.Router();
const BlogController = require('../controllers/BlogController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', BlogController.getAllBlogs);
router.get('/slug/:slug', BlogController.getBlogBySlug);
router.get('/:id', BlogController.getBlogById);
router.post('/', authMiddleware, uploadFor('blogs'), BlogController.createBlog);
router.put('/:id', authMiddleware, uploadFor('blogs'), BlogController.updateBlog);
router.delete('/:id', authMiddleware, BlogController.deleteBlog);

module.exports = router;
