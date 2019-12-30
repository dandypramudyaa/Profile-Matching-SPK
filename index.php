<html>
<head>
	<title>Home | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="index.php">Home</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav">
	      		<li class="nav-item">
	        		<a class="nav-link" href="inputdata.php">Input Data</a>
	      		</li>
	        	<li class="nav-item">
	            	<a class="nav-link" href="proses.php">Record</a>
	         	</li>
	         	<li class="nav-item">
	            	<a class="nav-link" href="rangking.php">Ranking</a>
	        	</li>
	      		<li class="nav-item">
	                <a class="nav-link" href="about.php">About</a>
	        	</li>
	    	</ul>
  		</div>
	</nav>
	<!-- /Navbar -->

	<!-- Container -->
	<div class="container"><br><br>

		<h2>
			<b>Sistem Pendukung Keputusan Pemilihan Beasiswa</b>
	  	</h2>
  
		<p style="text-align: justify;">
		STMIK adalah sebuah perguruan Tinggi Swasta, Beasiswa merupakan penghasilan bagi
		yang menerima dan tujuan beasiswa adalah untuk membantu meringankan beban biaya pendidikkan siswa atau
		mahasiswa yang mendapatkan. Peraturan Pemerintah Nomor 48 tahun 2008 tentang Pendanaan Pendidikan,
		Bagian Kelima, Pasal 27 ayat (1), menyebutkan bahwa Pemerintah dan pemerintah daerah sesuai
		kewenangannya memberi bantuan biaya pendidikan atau beasiswa kepada peserta didik yang orang tua atau
		walinya tidak mampu membiayai pendidikannya. Pasal 27 ayat (2), menyebutkan bahwa Pemerintah dan
		pemerintah daerah sesuai dengan kewenangannya dapat memberi beasiswa kepada peserta didik yang
		berprestasi. Pembagaian beasiswa dilakukan oleh beberapa lembaga untuk membantu seseorang yang kurang
		mampu ataupun berprestasi selama menempuh studinya. Perguruan Tinggi akan memberikan beasiswa kepada
		mahasiswa setiap semester. Hal ini tentu dengan tujuan untuk meringankan beban biaya pendidikan mahasiswa.
		Dengan kreteria sebagai berikut: IPK, penghasilan orang tua, tanggungan orang tua, semester. 
		</p>

		<p>
		Sasaran beasiswa adalah untuk Mahasiswa berprestasi (baik pada bidang akademik/kurikuler, ko-kurikuler
		maupun ekstra kurikuler). Dan Mahasiswa dengan prestasi minimal yang orang tua/wali-nya tidak mampu
		membiayai pendidikannya. Kriteria beasiswa yang diterapkan di STMIK adalah sebagai berikut:
		</p>

		<ul class="list-unstyled">
    		<li><b>Core factor (60%) :</b>
        		<ul>
            		<li>IPK</li>
            		<li>Penghasilan orang tua</li>
        		</ul>
      		</li>
      		<li><b>Secondar factor (40%) :</b>
        		<ul>
		            <li>Tanggungan orang tua</li>
		            <li>Semester</li>
        		</ul>
      		</li>
    	</ul>

		<!-- IPK -->
		<dl class="row">
			<dt class="col-sm-1">1.</dt>
			<dd class="col-sm-11"><b>IPK</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan, berdasarkan jumlah nilai
				IPK yang diperoleh oleh mahasiswa selama studi berlangsung.
			</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
			    <table class="table table-striped">
			    	<thead>
			        	<tr>
			            	<th scope="col">IPK</th>
			            	<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>< 2,5</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>>2,5 dan <= 3 </td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>>3 dan <= 3,5 </td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>> 3,5</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
    		</dd>
  		</dl>
  		<!-- /IPK -->

		<!-- Penghasilan Ortu -->
		<dl class="row">
    		<dt class="col-sm-1">2.</dt>
    		<dd class="col-sm-11"><b>Penghasilan Orang tua</b></dd>

    		<dt class="col-sm-1"></dt>
    		<dd class="col-sm-11">
    			Kriteria penghasilan orangtua merupakan persyaratan yang dibutuhkan untuk pengambilan
      			keputusan, berdasarkan jumlah penghasilan tetap maupun tidak setiap bulannya. Berikut penjabaran
      			interval jumlah penghasilan orangtua .
    		</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
      			<table class="table table-striped">
        			<thead>
          				<tr>
            				<th scope="col">Penghasilan ortu</th>
				            <th scope="col">Nilai</th>
				        </tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td><=1.000.000 </td>
			            	<th scope="row">4</th>
			          	</tr>
			          	<tr>
			            	<td>>1.000.000 <=3.000.000</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>>3.000.000 <=5.000.000</td>
			            	<th scope="row">2</th>
		          		</tr>
		          		<tr>
		            		<td>>=5.000.000</td>
		            		<th scope="row">1</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
  		<!-- /Penghasilan Orang Tua -->

  		<!-- Tanggungan -->
  		<dl class="row">
    		<dt class="col-sm-1">3.</dt>
    		<dd class="col-sm-11"><b>Tanggungan Orang Tua</b></dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	Kriteria jumlah tanggungan orangtua merupakan persyaratan yang dibutuhkan untuk pengambilan
		      	keputusan, berdasarkan jumlah anak yang masih menjadi tanggungan orangtua berupa biaya hidup.
		      	Berikut penjabaran jumlah interval anak yang telah dikonversikan dengan bilangan.
		    </dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	<table class="table table-striped">
		        	<thead>
		          		<tr>
		            		<th scope="col">Tanggungan Orang tua</th>
		            		<th scope="col">Nilai</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Jumlah 1</td>
		            		<th scope="row">1</th>
		          		</tr>
		          		<tr>
		            		<td>Jumlah 2</td>
		            		<th scope="row">2</th>
		          		</tr>
		          		<tr>
		            		<td>Jumlah 3</td>
		            		<th scope="row">3</th>
		         		</tr>
		          		<tr>
		            		<td>Jumlah >3 </td>
		            		<th scope="row">4</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
		<!-- /Tanggungan -->

	  	<!-- Semester -->
	  	<dl class="row">
	    	<dt class="col-sm-1">4.</dt>
	    	<dd class="col-sm-11"><b>Semester</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria semester merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	      		berdasarkan semester yang telah ditempuh. Berikut penjabaran interval semester yang telah
	      		dikonversikan dengan bilangan
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Semester</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td><=2, >8</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>3</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>4</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>5, 6</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>7, 8</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Semester --><br>

		<!-- GAP -->
  		<h4>GAP</h4>
  		<table class="table table-hover">
  			<thead>
    			<tr>
			    	<th scope="col">#</th>
			      	<th scope="col">Kriteria</th>
			      	<th scope="col">GAP</th>
			    </tr>
			</thead>
			<tbody>
    			<tr>
		      		<th scope="row">1</th>
		      		<td>IPK</td>
		      		<td>3</td>
		    	<tr>
      				<th scope="row">2</th>
      				<td>Penghasilan Orang Tua</td>
      				<td>3</td>
    			</tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>Tanggungan Orang Tua</td>
			      	<td>3</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			      	<td>Semester</td>
			      	<td>2</td>
			    </tr>
			</tbody>
		</table><br><br>
		<!-- /GAP -->

		<!-- BOBOT -->
	  	<h4>Bobot</h4>
	  	<table class="table table-hover">
	  		<thead>
	    		<tr>
	      			<th scope="col">#</th>
	      			<th scope="col">Selisih</th>
	      			<th scope="col">Bobot Nilai</th>
	      			<th scope="col">Keterangan</th>
	    		</tr>
	  		</thead>
	  		<tbody>
			    <tr>
			      	<th scope="row">1</th>
			      	<td>0</td>
			      	<td>5</td>
			      	<td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
			    </tr>
			    <tr>
			      	<th scope="row">2</th>
			      	<td>1</td>
			      	<td>4,5</td>
			      	<td>Kompetensi individu kelebihan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>-1</td>
			      	<td>4</td>
			      	<td>Kompetensi individu kekurangan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			     	<td>2</td>
			      	<td>3,5</td>
			      	<td>Kompetensi individu kelebihan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">5</th>
			      	<td>-2</td>
			      	<td>3</td>
			      	<td>Kompetensi individu kekurangan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">6</th>
			      	<td>3</td>
			      	<td>2,5</td>
			      	<td>Kompetensi individu kelebihan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">7</th>
			      	<td>-3</td>
			      	<td>2</td>
			      	<td>Kompetensi individu kekurangan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">8</th>
			      	<td>4</td>
			      	<td>1,5</td>
			      	<td>Kompetensi individu kelebihan 4 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">9</th>
			      	<td>-4</td>
			      	<td>1</td>
			      	<td>Kompetensi individu kekurangan 4 tingkat/level</td>
			    </tr>
			</tbody>
		</table>
		<!-- /BOBOT -->

	</div>
  	<!-- /Container -->

</body>
</html>