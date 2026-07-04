const Career = require('../models/Career');

exports.getAllCareers = async (req, res) => {
  try {
    const items = await Career.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getCareerById = async (req, res) => {
  try {
    const item = await Career.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Career not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createCareer = async (req, res) => {
  try {
    const item = await Career.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateCareer = async (req, res) => {
  try {
    const item = await Career.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Career not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteCareer = async (req, res) => {
  try {
    const item = await Career.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Career not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'Career deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
