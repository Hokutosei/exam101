FROM tutum/lamp:latest

#COPY run_php.sh /

#RUN chmod a+x /run_php.sh

EXPOSE 80 8888
WORKDIR /app/public

ENTRYPOINT php -S localhost:8888
