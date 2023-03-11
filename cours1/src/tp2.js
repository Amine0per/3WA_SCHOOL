import {useState} from 'react';
import ReactDOM from 'react-dom/client';
import './App.css';
 
function Xxxx() {

  const [Nom, setNom] = useState("");
  const [Email, setEmail] = useState("");
  const [MotDePasse, setMotDePasse] = useState("");
  const [DateDeNaissance, setDateDeNaissance] = useState("");
  const [NombreDenfants, setNombreDenfants] = useState("");
  const [Choix, setChoix]= useState("");
  const [Textarea, setTextarea]= useState("");
  const [Sexe, setSexe]= useState("");
  
  const ChoixSexe = (event) => {
    setSexe(event.target.value);
  }
 
  const HandleSubmit = (e) => { 
    e.preventDefault();
    alert(`les informations que vous avez entres sont : ${Nom} , ${Email} , ${MotDePasse} , ${DateDeNaissance} , ${NombreDenfants} , ${Textarea} , ${Sexe} , ${Choix} `); }

   
  return (
  <>
  <p>lorem10</p>
  <form onSubmit={HandleSubmit}>
      <label for="Nom">Nom</label>
      <input type="text" id="Nom" name="Nom" value={Nom} onChange={(e)=> setNom(e.target.value)} ></input>
      <br/><br/>
      <label for="Email">Email</label>
      <input type="email" id="Email" name="Email" value={Email} onChange={(e)=> setEmail(e.target.value)} ></input>
      <br/><br/>
      <label for="MotDePasse">Mot De Passe</label>
      <input type="text" id="MotDePasse" name="MotDePasse" value={MotDePasse} onChange={(e)=> setMotDePasse(e.target.value)} ></input>
      <br/><br/>
      <label for="DateDeNaissance">Date De Naissance</label>
      <input type="date" id="DateDeNaissance" name="DateDeNaissance" value={DateDeNaissance} onChange={(e)=> setDateDeNaissance(e.target.value)} ></input>
      <br/><br/>
      <label for="NombreDenfants">Nombre d'enfants</label>
      <input type="number" id="NombreDenfants" name="NombreDenfants" value={NombreDenfants} onChange={(e)=> setNombreDenfants(e.target.value)} ></input>
      <br/><br/>
      Description
      <textarea value={Textarea} onChange={(e)=> setTextarea(e.target.value)}  />
      <br/><br/>
      sexe <br/>

      
      <label for="Masculin">Masculin</label>
      <input type="radio" id="Masculin" name="Sexe" value="Masculin" checked={Sexe === 'Masculin'} onChange={ChoixSexe} ></input>

      <label for="feminin">feminin</label>
      <input type="radio" id="Feminin" name="Sexe" value="Feminin" checked={Sexe === 'Feminin'} onChange={ChoixSexe} ></input>

      <label for="Autre">Autre</label>
      <input type="radio" id="Autre" name="Sexe"  value="Autre" checked={Sexe === 'Autre'} onChange={ChoixSexe} ></input>
      

      <br/><br/>
      Comment vous nous avez connu?
      <select value={Choix} onChange={(e)=> setChoix(e.target.value)} >
        <option value="Instagram">Instagram</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Autre">Autre</option>
      </select>
      <br/><br/>
     
      <input type="submit" value="Enregistrer"/>
      <button type="reset" >Annuler</button>
      
  </form>
  
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);