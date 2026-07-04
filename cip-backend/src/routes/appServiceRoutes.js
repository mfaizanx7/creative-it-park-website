const express = require('express');
const router = express.Router();
const appServiceController = require('../controllers/AppServiceController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', appServiceController.getAllAppServices);
router.get('/:id', appServiceController.getAppServiceById);
router.post('/', authMiddleware, uploadFor('app_service', 'icon'), appServiceController.createAppService);
router.put('/:id', authMiddleware, uploadFor('app_service', 'icon'), appServiceController.updateAppService);
router.delete('/:id', authMiddleware, appServiceController.deleteAppService);

module.exports = router;
