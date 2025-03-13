

curl -X 'POST' \
'http://127.0.0.1:8000/api/v1/prompts/create/' \
-H 'accept: application/json' \
-H 'Content-Type: application/json' \
-d '{
"prompt": "This is a test prompt"
}'



curl -X 'GET' \
'http://127.0.0.1:8000/api/v1/messageloggers/findbyrequestid?requestId=21915bd9-25b4-45d8-9071-a3e735125c21' \
-H 'accept: application/json'