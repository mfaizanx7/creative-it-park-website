const Portfolio = require('../models/Portfolio');

exports.getAllPortfolios = async (req, res) => {
  try {
    const items = await Portfolio.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getPortfolioById = async (req, res) => {
  try {
    const item = await Portfolio.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Portfolio not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createPortfolio = async (req, res) => {
  try {
    const { heading, link, type } = req.body;
    const image = req.file ? req.file.filename : '';
    const item = await Portfolio.create({ heading, link, type, image });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updatePortfolio = async (req, res) => {
  try {
    const item = await Portfolio.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Portfolio not found' });
    const { heading, link, type } = req.body;
    if (heading !== undefined) item.heading = heading;
    if (link !== undefined) item.link = link;
    if (type !== undefined) item.type = type;
    if (req.file) item.image = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deletePortfolio = async (req, res) => {
  try {
    const item = await Portfolio.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Portfolio not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'Portfolio deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
