const Faq = require('../models/Faq');

exports.getAllFaqs = async (req, res) => {
  try {
    const items = await Faq.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getFaqById = async (req, res) => {
  try {
    const item = await Faq.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Faq not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createFaq = async (req, res) => {
  try {
    const item = await Faq.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateFaq = async (req, res) => {
  try {
    const item = await Faq.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Faq not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteFaq = async (req, res) => {
  try {
    const item = await Faq.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Faq not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'Faq deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
