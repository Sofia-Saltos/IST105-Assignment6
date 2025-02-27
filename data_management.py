import sys
import json

def process_data(args):
    try:
        numbers = [float(arg) for arg in args]
        
        if any(n is None for n in numbers):
            return {'error': 'All inputs must be numeric values.'}
        
        if any(n < 0 for n in numbers):
            return {'error': 'Negative values are not allowed.'}
        
        average = sum(numbers) / len(numbers)
        average_msg = 'Average is greater than 50.' if average > 50 else 'Average is not greater than 50.'
        
        positive_count = sum(1 for n in numbers if n > 0)
        positive_count_msg = 'Even count of positive numbers.' if positive_count % 2 == 0 else 'Odd count of positive numbers.'
        
        new_list = [n for n in numbers if n > 10]
        sorted_list = sorted(new_list)
        
        return {
            'original_values': numbers,
            'sorted_values': sorted_list,
            'average_msg': average_msg,
            'positive_count_msg': positive_count_msg
        }
    except Exception as e:
        return {'error': str(e)}

if __name__ == '__main__':
    args = sys.argv[1:]
    result = process_data(args)
    print(json.dumps(result))
