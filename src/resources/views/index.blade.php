@extends('layouts.default')
<style>
    th {
        background-color:rgb(188, 183, 172);
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFF;
    }
    td {
        padding: 25px 40px;
        background-color:rgb(255, 255, 255);
        text-align: center;
    }

    svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    }
</style>
@section('title','PiGLy')

@section('content')
<table>
    <tr>
        <th>日付</th>
        <th>体重</th>
        <th>摂取カロリー</th>
        <th>運動時間</th>
        <th>運動内容</th>
    </tr>
    @foreach($weight_logs as $logs)
    <tr>
        <td>{{ $logs->date }}</td>
        <td>¥{{ $logs->weight }}</td>
        <td>{{ $logs->calories }}</td>
        <td>{{ $logs->exercise_time }}</td>
        <td>{{ $logs->exercise_content }}</td>
    </tr>
    @endforeach

</table>
{{ $weight_logs->links() }}
@endsection