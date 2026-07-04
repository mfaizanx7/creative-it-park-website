const News = require('../models/News');

exports.getAllNewss = async (req, res) => {
  try {
    const items = await News.findAll({ order: [['created_at', 'DESC']] });
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getNewsById = async (req, res) => {
  try {
    const item = await News.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'News not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createNews = async (req, res) => {
  try {
    const { title, description, author } = req.body;
    const image = req.file ? req.file.filename : '';
    const item = await News.create({ title, description, author, image });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateNews = async (req, res) => {
  try {
    const item = await News.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'News not found' });
    const { title, description, author } = req.body;
    if (title !== undefined) item.title = title;
    if (description !== undefined) item.description = description;
    if (author !== undefined) item.author = author;
    if (req.file) item.image = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteNews = async (req, res) => {
  try {
    const item = await News.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'News not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'News deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
