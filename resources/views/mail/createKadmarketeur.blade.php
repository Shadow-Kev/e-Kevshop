<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
body {
  background: linear-gradient(35deg, #64B6AC, #3C6B7C 100%);
}

.container,
.first,
.second {
  position: absolute;
}

.container {
  margin: auto;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 170px;
  height: 50px;
  transition: all 0.3s ease; 
}

.wrap {
  width: 100%;
  height: 50px;
  border: 2px solid #FFF;
  transition: all 0.3s ease;
  border-radius: 5px;
}

.first,
.second {
  width: 100%;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  transition: all 0.2s ease-in-out;
  font-size: 17px;
  text-transform: uppercase;
  color: #FFF;
  letter-spacing: 2px; 
  text-align: center;
  vertical-align: middle;
  line-height: 50px;
}

.second {
  opacity: 0;
}

.container:hover {
   width: 280px;
  
  .wrap {
  padding-bottom: 17px;
  }
  .first {
    transform: translateY(-8px);
    padding-top: 5px;
  }
  .second {
    transform: translateY(20px);
    opacity: 1;
  }
}
</style>

<div style="width: 100%; display:block;">
<h2>Bienvenue sur KADMARKET</h2>
<p>
	<strong>Salut {{$user->nom}}.</strong><br>
    <p>Votre compte kadmarketeur a ete créé avec succes. </p>
    <p>Le compte est actuellement inactif. il sera activé apès vérification dans un délai de 72h!</p>
    <p><b>Merci pour votre confiance</b></p>
	<br><br>
	<strong>Cordialement.</strong><br>
	Equipe Kadmarket.
</p>
</div>