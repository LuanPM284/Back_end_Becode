# Back_end_Becode
A testing site for learning PHP

### Personal Note

Docker install went well using the [env](https://github.com/becodeorg/Swartz-9/tree/main/2.The-Hill/2.PHP/docker_env) provided by Becode

After installing Docker on my machine I could open a terminal on the right directory and run the follwing command to mount the container:

`docker-compose up`

If I ever want to modify something(and I might since it's not up to date) I can go to the `docker-compose.yml`.

For the small exercices I opened `index.php` using vscode and added a `echo 'Hello!'`

The image was done by adding an HTML tag after `echo`, like the following.

The link to another `.php` file is added by an anchor tag and liking to the said page.

```PHP
<?php
	echo "Hello!";
	echo "Hello! Twice";
// phpinfo();
echo ' 
<!DOCTYPE>
<html>
<a href="/cats.php">Cats</a>
<a href="/index.php">index</a>
<img src="https://i0.wp.com/backofficethinking.com/wp-content/uploads/2023/01/cute-kitten.jpg?resize=768%2C657&ssl=1" title="Cat open-source" alt="image of a orange kitten" />
</html>
';
?>
```