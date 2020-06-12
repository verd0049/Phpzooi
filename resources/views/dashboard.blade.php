@extends('layout')
@section('content')


<h1>Evan Verdoorn's dashboard</h1>

{{--@foreach($errors as $errors)--}}
{{--    <div class="blog-style">--}}
{{--        --}}{{--            <a href="{{$errors->path()}}" class="no-hyperlink">--}}
{{--        <li class="name">--}}
{{--            {{$errors->name}}--}}
{{--        </li>--}}
{{--        </a>--}}

{{--        <li class="ECs">--}}
{{--            {{$errors->ECs}}--}}
{{--        </li>--}}

{{--    </div>--}}

{{--@endforeach--}}


<table>
    <tr>
        <th>Cursus</th>
        <th>Toets</th>
        <th>Weging</th>
        <th>EC</th>
        <th>Cijfers</th>
    </tr>
    <tr>
        <td>Opleidings- en beroepsoriëntatie</td>
        <td>Eindgesprek</td>
        <td>100%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Computer science basics</td>
        <td>Theorietentamen</td>
        <td>100%</td>
        <td>7.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Programming basics</td>
        <td>Casustoets</td>
        <td>100%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Professional skills 1</td>
        <td>Presentatie</td>
        <td>33%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Verslag</td>
        <td>33%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Functioneringsgesprek</td>
        <td>33%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>HZ Personality</td>
        <td>Portfolio</td>
        <td>100%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Object-oriented programming</td>
        <td>Casustoets</td>
        <td>50%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Groepsproject</td>
        <td>50%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Professional skills 2</td>
        <td>Agile functioneren</td>
        <td>50%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Engels opdrachten</td>
        <td>25%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Engels werkstuk</td>
        <td>25%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Professionele werkplek</td>
        <td>Eindgesprek</td>
        <td>100%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Framework development 1</td>
        <td>Casustoets</td>
        <td>100%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Framework project 1</td>
        <td>Requirementsverslag</td>
        <td>50%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Projectresultaat</td>
        <td>50%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Professional skills 3</td>
        <td>Agile functioneren</td>
        <td>50%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Engels opdrachten</td>
        <td>25%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Engels werkstuk</td>
        <td>25%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>IT Personality 1</td>
        <td>Portfolio</td>
        <td>100%</td>
        <td>2.5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Framework development 2</td>
        <td>Opdrachten</td>
        <td>100%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td>Framework project 2</td>
        <td>Code reviews</td>
        <td>50%</td>
        <td>5</td>
        <td class="unsufficient"></td>
    </tr>
    <tr>
        <td></td>
        <td>Projectresultaat</td>
        <td>50%</td>
        <td></td>
        <td class="unsufficient"></td>
    </tr>
</table>

<div>
    <h2>Studiewijzer</h2>
    <ul>
        <a
            href="https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf">Onderwijs-
            en Examenregeling</a>
        <a
            href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/15.-CO-vt-Uitvoeringsregeling-HZ-2018-2019-V02.pdf">Uitvoeringsregeling</a>
        <a href="https://learn.hz.nl/course/view.php?id=15960#section-0">Learn</a>
        <a
            href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
        <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studievoortgang</a>
        <a href="https://github.com/HZ-HBO-ICT">Github</a>

    </ul>

</div>


@endsection
