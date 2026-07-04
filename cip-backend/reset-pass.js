require('dotenv').config();
const { sequelize } = require('./src/config/database');
const Admin = require('./src/models/Admin');

const resetPassword = async () => {
  try {
    await sequelize.authenticate();
    const admin = await Admin.findOne({ where: { email: 'admin@example.com' } });
    if (admin) {
      admin.password = '$2b$10$uB7FcrwxYYINPO1E0S1o1ezU77VnMmQZFLLaySN0gLkLxqvwVOQXC';
      await admin.save();
      console.log('Password successfully reset to "password"');
    } else {
      console.log('Admin not found');
    }
    process.exit(0);
  } catch (err) {
    console.error(err);
    process.exit(1);
  }
};

resetPassword();
