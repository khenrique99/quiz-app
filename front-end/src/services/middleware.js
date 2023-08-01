import Cookie from 'js-cookie';

export default {
  auth(to, from, next) {
    const token = Cookie.get('_myAppToken');

    if (!token) {
      next('/login');
    }

    next();
  },
  autenticator(to, from, next) {
    const token = Cookie.get('_myAppToken');

    if (token) {
      next('/');
    }

    next();
  }
}
