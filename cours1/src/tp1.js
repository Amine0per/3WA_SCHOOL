import React from 'react';
import ReactDOM from 'react-dom/client';
import './App.css';

function Choix1 (props) { return <li>{props.lidentifant}  {props.liste1} </li> }
function Choix2 (props) { return <li><span className='aaa'>{props.liste2}</span>  &nbsp; 2022-2023</li> }
function Choix3 (props) { return <li>{props.liste3} </li> }


function Xxxx() {

  const LesChoix1 = [
    {id:1 , choix:"Acceuil"},
    {id:2 , choix:"parcour"},
    {id:3 , choix:"contact"}
  ];
  const LesChoix2 = [
    {id:1 , choix:"Developpement Web FS-26 3w Academy Maroc  "},
    {id:2 , choix:"Ingenieur Mecanique  "},
    {id:3 , choix:"Bac D Lycee...Casa"}
  ];
  const LesChoix3 = [
    {id:1 , choix:"Lecture"},
    {id:2 , choix:"jeux video"},
    {id:3 , choix:"cinema"},
    {id:4 , choix:"manger"},
    {id:5 , choix:"athletisme"}
  ];

  const LesElementsDuTableau = [
    {id:1 , Personnel:"Rigoureux" , techniques:"Front-end; html; css;" , Lingustiques:"Anglais" },
    {id:2 , Personnel:"Sociable" , techniques:"Autre, electronique; maintenance" , Lingustiques:"Allemand" },
    {id:3 , Personnel:"Curieux" , techniques:"Outils bootstrap" , Lingustiques:"Italien" }
  ];
  return (

  <>
  
  
  <ul>
    {LesChoix1.map((c)=> <Choix1 lidentifant={c.id} liste1 = {c.choix} />) }
  </ul>

<h2>Formation</h2>
<ol>
    {LesChoix2.map((c)=> <Choix2 key={c.id} liste2 = {c.choix} />) }
</ol>
<h2>Experience professionel</h2>
<p>Nom entreprise</p>
<p className='ccc'>-Description des taches</p>
<p>Nom entreprise</p>
<p className='ccc'>-Description des taches</p>
<p>Nom entreprise</p>
<p className='ccc'>-Description des taches</p>
<h2>Competences</h2>
<table>
        <caption>Tableau des compétences</caption>
        <thead>
            <th>Personnel</th>
            <th>techniques</th>
            <th>Lingustiques</th>

        </thead>
        <tbody>

        {LesElementsDuTableau.map((c) => (
          <tr key={c.id}>
            <td>{c.Personnel}</td>
            <td>{c.techniques}</td>
            <td>{c.Lingustiques}</td>
          </tr>
        ))}
 
    </tbody>
    </table>
    <h2>Centres d'interet</h2>
    <ul>
    {LesChoix3.map((c)=> <Choix3 key={c.id} liste3 = {c.choix} />) }
  
  </ul>
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);