<h5 data-v-e53281f6="">Deployment</h5>
<ol data-v-e53281f6="">
	<li data-v-e53281f6="">Extract the archive and put it in the folder you want</li><li data-v-e53281f6=""> Run 
		<code data-v-e53281f6="">cp .env.example .env</code> 
		file to copy example file to
		<code data-v-e53281f6="">.env</code>
		<br data-v-e53281f6="">Then edit your 
		<code data-v-e53281f6="">.env</code> 
	file with DB credentials and other settings. </li>
	<li data-v-e53281f6="">Run 
		<code data-v-e53281f6="">composer install</code> command</li> 
	<li data-v-e53281f6=""> Run 
		<code data-v-e53281f6="">php artisan migrate --seed</code> command. 
		<br data-v-e53281f6="">
Notice: seed is important, because it will create the first admin
user for you. </li> 
	<li data-v-e53281f6="">Run 
		<code data-v-e53281f6="">php artisan key:generate</code> command.</li> 
	<li data-v-e53281f6=""> If you have file/photo fields, run
		<code data-v-e53281f6="">php artisan storage:link</code> command.
	</li>
</ol>