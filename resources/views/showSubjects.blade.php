<table class="table table-bordered align-center">
    <tr class="question">
        <td>Courses</td> 
    </tr>
    @if($numberOfSubjects>0)
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->title }} 
                
                </td>
            </tr>
        @endforeach   
    @else 
        <tr>
            <td>No course available for level <h4>{{$level}}</h4> in program <h4>{{$coursetypes->type}}</h4> </td>
        </tr>
    @endif
</table>
