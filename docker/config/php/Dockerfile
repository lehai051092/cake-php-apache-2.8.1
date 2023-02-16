FROM lehai0510:web-cake:5.6

ARG UID
ARG GID

RUN usermod -u ${UID} www-data \
	&& groupmod -g ${GID} www-data \
	&& chown -R www-data:www-data /var/www/html \
