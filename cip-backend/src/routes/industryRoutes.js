const express = require('express');
const router = express.Router();
const industryController = require('../controllers/IndustryController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', industryController.getAllIndustrys);
router.get('/slug/:slug', industryController.getIndustryBySlug);
router.get('/:id', industryController.getIndustryById);
router.post('/', authMiddleware, uploadFor('industry'), industryController.createIndustry);
router.put('/:id', authMiddleware, uploadFor('industry'), industryController.updateIndustry);
router.delete('/:id', authMiddleware, industryController.deleteIndustry);

module.exports = router;
