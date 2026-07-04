const Industry = require('../models/Industry');

const slugify = (text) => text.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');

exports.getIndustryBySlug = async (req, res) => {
  try {
    const item = await Industry.findOne({ where: { slug: req.params.slug } });
    if (!item) return res.status(404).json({ status: 'error', message: 'Industry not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getAllIndustrys = async (req, res) => {
  try {
    const items = await Industry.findAll();
    res.json({ status: 'success', data: items });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.getIndustryById = async (req, res) => {
  try {
    const item = await Industry.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Industry not found' });
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};

exports.createIndustry = async (req, res) => {
  try {
    const { heading, detail, slug, icon } = req.body;
    const image = req.file ? req.file.filename : '';
    const item = await Industry.create({
      heading,
      detail,
      slug: slug || slugify(heading),
      image,
      icon: icon || '',
    });
    res.status(201).json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.updateIndustry = async (req, res) => {
  try {
    const item = await Industry.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Industry not found' });
    const { heading, detail, slug, icon } = req.body;
    if (heading !== undefined) { item.heading = heading; item.slug = slug || slugify(heading); }
    if (detail !== undefined) item.detail = detail;
    if (icon !== undefined) item.icon = icon;
    if (req.file) item.image = req.file.filename;
    await item.save();
    res.json({ status: 'success', data: item });
  } catch (error) {
    res.status(400).json({ status: 'error', message: error.message });
  }
};

exports.deleteIndustry = async (req, res) => {
  try {
    const item = await Industry.findByPk(req.params.id);
    if (!item) return res.status(404).json({ status: 'error', message: 'Industry not found' });
    await item.destroy();
    res.json({ status: 'success', message: 'Industry deleted' });
  } catch (error) {
    res.status(500).json({ status: 'error', message: error.message });
  }
};
