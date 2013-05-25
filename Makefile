foo:
	@echo 'Usage:'
	@echo 'make create-cache-directory'
	@echo 'make change-tmp-dir-file-permission'


create-cache-directory:
	@mkdir app/tmp
	@mkdir app/tmp/cache app/tmp/logs  app/tmp/sessions  app/tmp/tests
	@mkdir app/tmp/cache/models  app/tmp/cache/persistent  app/tmp/cache/views
	@chmod -R 777 app/tmp
change-tmp-dir-file-permission:
	@sudo chmod -R 777 app/tmp
