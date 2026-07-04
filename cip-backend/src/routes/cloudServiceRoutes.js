const express = require('express');
const router = express.Router();
const cloudServiceController = require('../controllers/CloudServiceController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', cloudServiceController.getAllCloudServices);
router.get('/:id', cloudServiceController.getCloudServiceById);
router.post('/', authMiddleware, cloudServiceController.createCloudService);
router.put('/:id', authMiddleware, cloudServiceController.updateCloudService);
router.delete('/:id', authMiddleware, cloudServiceController.deleteCloudService);

module.exports = router;
