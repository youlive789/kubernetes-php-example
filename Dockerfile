FROM php:cli-alpine
EXPOSE 80
RUN mkdir -p /app
COPY index.php /app/index.php
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:80"]