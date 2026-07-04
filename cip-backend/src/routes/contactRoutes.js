const express = require('express');
const router = express.Router();
const contactController = require('../controllers/ContactController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/', contactController.getAllContacts);
router.get('/:id', contactController.getContactById);
router.post('/', contactController.createContact);
router.put('/:id', authMiddleware, contactController.updateContact);
router.delete('/:id', authMiddleware, contactController.deleteContact);

module.exports = router;
