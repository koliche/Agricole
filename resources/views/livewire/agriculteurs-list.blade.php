<div>
    <h3>Question 1: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question1 as $question)
            <tr>
                <th>{{$question['agr_nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3>Question 2: </h3>
    <ul>
        @foreach($question2 as $quest2)
            <li>{{$quest2["par_nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 3: </h3>
    <ul>
        @foreach($question3 as $question)
            <li><strong>Nom:</strong> {{$question["par_nom"]}} <strong>Lieu:</strong> {{$question["par_lieu"]}} <strong>Superficie:</strong> {{$question["par_superficie"]}}</li>
        @endforeach
    </ul>
    <h3>Question 4: </h3>
    <ul>
        @foreach($question4 as $quest4)
            <li>{{$quest4["par_nom"]}}  <strong>Agr_Nom:</strong> {{$quest4["agr_nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 5: </h3>
    <ul>
        @foreach($question5 as $quest5)
            <li> <strong>Nombre de jours : </strong>{{$quest5["nb_jours"]}}</li>
        @endforeach
    </ul>
    <h3>Question 6: </h3>
    <ul>
        @foreach($question6 as $quest6)
            <li><strong>Debut d'intervention :</strong> {{$quest6['int_debut']}} <strong>le nom de la parcelle concernée :</strong> {{$quest6['par_nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 7: </h3>
    <ul>
        @foreach($question77 as $quest77)
            <li><strong>Debut d'intervention</strong>  : {{$quest77['int_debut']}} <strong>le nom de la parcelle concernée:</strong>  le nom de
                l’employé : {{$quest77['emp_nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 8: </h3>
    <ul>
        @foreach($question8 as $quest8)
            <li><strong>Affichez les interventions de l’employe Pernet : </strong>{{$question['int_debut']}}</li>
        @endforeach
    </ul>
    <h3>Question 9: </h3>
    <ul>
        @foreach($question9 as $quest9)
            <li><strong>Calculez la superficie totale des parcelles : </strong>{{$question['agr_nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 10: </h3>
    <ul>
        @foreach($question10 as $quest10)
            <li><strong>Affichez le nom de la plus grande parcelle : </strong>{{$question['agr_nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 11: </h3>
    <ul>
        @foreach($question11 as $quest11)
            <li>Affichez le nom de la plus petite parcelle :{{$question['agr_nom']}}</li>
        @endforeach
    </ul>


</div>