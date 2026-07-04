const express = require('express');
const router = express.Router();
const faqController = require('../controllers/FaqController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', faqController.getAllFaqs);
router.get('/:id', faqController.getFaqById);
router.post('/', authMiddleware, faqController.createFaq);
router.put('/:id', authMiddleware, faqController.updateFaq);
router.delete('/:id', authMiddleware, faqController.deleteFaq);

module.exports = router;
