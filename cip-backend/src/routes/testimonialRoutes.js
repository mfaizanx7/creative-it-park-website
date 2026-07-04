const express = require('express');
const router = express.Router();
const testimonialController = require('../controllers/TestimonialController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', testimonialController.getAllTestimonials);
router.get('/:id', testimonialController.getTestimonialById);
router.post('/', authMiddleware, uploadFor('testimonial'), testimonialController.createTestimonial);
router.put('/:id', authMiddleware, uploadFor('testimonial'), testimonialController.updateTestimonial);
router.delete('/:id', authMiddleware, testimonialController.deleteTestimonial);

module.exports = router;
