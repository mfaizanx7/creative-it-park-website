const Website = require('../models/Website');

exports.getAll = async (req, res) => {
    try {
        const where = req.query.type ? { type: req.query.type } : {};
        const data = await Website.findAll({ where, order: [['id', 'ASC']] });
        res.status(200).json({ success: true, data });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

exports.getById = async (req, res) => {
    try {
        const item = await Website.findByPk(req.params.id);
        if (!item) return res.status(404).json({ success: false, message: 'Not found' });
        res.status(200).json({ success: true, data: item });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

exports.create = async (req, res) => {
    try {
        const { heading, discription, type } = req.body;
        const icon = req.file ? req.file.filename : '';
        const item = await Website.create({ heading, discription, type, icon });
        res.status(201).json({ success: true, data: item });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

exports.update = async (req, res) => {
    try {
        const item = await Website.findByPk(req.params.id);
        if (!item) return res.status(404).json({ success: false, message: 'Not found' });
        const { heading, discription, type } = req.body;
        if (heading !== undefined) item.heading = heading;
        if (discription !== undefined) item.discription = discription;
        if (type !== undefined) item.type = type;
        if (req.file) item.icon = req.file.filename;
        await item.save();
        res.status(200).json({ success: true, data: item });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

exports.delete = async (req, res) => {
    try {
        const item = await Website.findByPk(req.params.id);
        if (!item) return res.status(404).json({ success: false, message: 'Not found' });
        await item.destroy();
        res.status(200).json({ success: true, message: 'Deleted successfully' });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};
