const Contact = require('../models/Contact');

exports.getAllContacts = async (req, res) => {
  try {
    const items = await Contact.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getContactById = async (req, res) => {
  try {
    const item = await Contact.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Contact not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createContact = async (req, res) => {
  try {
    const item = await Contact.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateContact = async (req, res) => {
  try {
    const item = await Contact.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Contact not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteContact = async (req, res) => {
  try {
    const item = await Contact.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Contact not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'Contact deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
