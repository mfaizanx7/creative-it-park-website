const express = require('express');
const router = express.Router();
const uiServiceController = require('../controllers/UiServiceController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', uiServiceController.getAllUiServices);
router.get('/:id', uiServiceController.getUiServiceById);
router.post('/', authMiddleware, uploadFor('ui_service', 'icon'), uiServiceController.createUiService);
router.put('/:id', authMiddleware, uploadFor('ui_service', 'icon'), uiServiceController.updateUiService);
router.delete('/:id', authMiddleware, uiServiceController.deleteUiService);

module.exports = router;
