const express = require('express');
const router = express.Router();
const careerController = require('../controllers/CareerController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', careerController.getAllCareers);
router.get('/:id', careerController.getCareerById);
router.post('/', careerController.createCareer);
router.put('/:id', authMiddleware, careerController.updateCareer);
router.delete('/:id', authMiddleware, careerController.deleteCareer);

module.exports = router;
