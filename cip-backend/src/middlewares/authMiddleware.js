const jwt = require('jsonwebtoken');
const Admin = require('../models/Admin');

const authMiddleware = async (req, res, next) => {
  try {
    let token;
    
    if (req.headers.authorization && req.headers.authorization.startsWith('Bearer')) {
      token = req.headers.authorization.split(' ')[1];
    }

    if (!token) {
      return res.status(401).json({ message: 'Not authorized, no token' });
    }

    // Verify token
    const decoded = jwt.verify(token, process.env.JWT_SECRET);

    // Attach admin to request
    const admin = await Admin.findByPk(decoded.id, {
      attributes: { exclude: ['password'] } // Don't return password
    });

    if (!admin) {
      return res.status(401).json({ message: 'Not authorized, admin not found' });
    }

    req.admin = admin;
    next();
  } catch (error) {
    console.error('Auth Middleware Error:', error);
    res.status(401).json({ message: 'Not authorized, token failed' });
  }
};

module.exports = authMiddleware;
