from airflow import DAG
from airflow.operators.python import PythonOperator
from datetime import datetime
import pandas as pd

# Define the function that uses Pandas
def process_data():
    # initialize list of lists
    data = [['tom', 10], ['nick', 15], ['juli', 14]]

# Create the pandas DataFrame
    df = pd.DataFrame(data, columns=['Name', 'Age'])

    print(df)

# Define the DAG
default_args = {
    'start_date': datetime(2024, 1, 1),
    'retries': 1
}

with DAG(
    dag_id='pandas_test_dag',
    default_args=default_args,
    schedule_interval=None,  # Set to None for manual triggering
    catchup=False
) as dag:

    # Define a task using the Python function
    process_data_task = PythonOperator(
        task_id='process_data_task',
        python_callable=process_data
    )

    process_data_task
