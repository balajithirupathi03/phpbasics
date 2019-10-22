class aa{
    public $ba;
    public $la;
}

$objectaa=new aa();
$objectaa->ba="object first property one";
$objectaa->la="object first property two";

$objectbb=new aa();
$objectbb->ba="object second property one";
$objectbb->la="object second property two";

$abc=array(objectaa,objectbb);
foreach($abc as $xxx)
echo "$xxx -> $ba $xxx->$la";
