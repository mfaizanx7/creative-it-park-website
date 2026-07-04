const Subscribe = require('../models/Subscribe');

exports.getAllSubscribes = async (req, res) => {
  try {
    const items = await Subscribe.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getSubscribeById = async (req, res) => {
  try {
    const item = await Subscribe.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Subscribe not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createSubscribe = async (req, res) => {
  try {
    const item = await Subscribe.create(req.body);
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateSubscribe = async (req, res) => {
  try {
    const item = await Subscribe.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Subscribe not found' });
    
    await item.update(req.body);
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteSubscribe = async (req, res) => {
  try {
    const item = await Subscribe.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Subscribe not found' });
    
    await item.destroy();
    res.json({ status: 'success', message: 'Subscribe deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
