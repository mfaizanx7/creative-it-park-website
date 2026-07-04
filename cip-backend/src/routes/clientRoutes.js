const express = require('express');
const router = express.Router();
const clientController = require('../controllers/ClientController');
const authMiddleware = require('../middlewares/authMiddleware');
const { uploadFor } = require('../middlewares/uploadMiddleware');

router.get('/', clientController.getAllClients);
router.get('/:id', clientController.getClientById);
router.post('/', authMiddleware, uploadFor('client'), clientController.createClient);
router.put('/:id', authMiddleware, uploadFor('client'), clientController.updateClient);
router.delete('/:id', authMiddleware, clientController.deleteClient);

module.exports = router;
