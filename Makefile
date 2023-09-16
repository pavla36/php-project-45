#Makefile
.PHONY: brain-games brain-even brain-calc brain-gcd brain-progression brain-prime

install:
	composer install

validate:
	composer validate

brain-games:
	./bin/brain-games

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime