<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta http-equiv="Content-Type" content="text/html;"/>
    <meta charset="UTF-8">
	<style media="all">
		@font-face {
            font-family: 'Roboto';
            src: url("{{ static_asset('fonts/Roboto-Regular.ttf') }}") format("truetype");
            font-weight: normal;
            font-style: normal;
        }
        *{
            margin: 0;
            padding: 0;
            line-height: 1.3;
            font-family: 'Roboto';
            color: #333542;
        }
		body{
			font-size: .875rem;
		}
		.gry-color *,
		.gry-color{
			color:#878f9c;
		}
		table{
			width: 100%;
		}
		table th{
			font-weight: normal;
		}
		table.padding th{
			padding: .5rem .7rem;
		}
		table.padding td{
			padding: .7rem;
		}
		table.sm-padding td{
			padding: .2rem .7rem;
		}
		.border-bottom td,
		.border-bottom th{
			border-bottom:1px solid #eceff4;
		}
		.text-left{
			text-align:left;
		}
		.text-right{
			text-align:right;
		}
		.small{
			font-size: .85rem;
		}
		.currency{

		}
	</style>
</head>
<body>
	<div>
		@php
			$logo = get_setting('header_logo');
		@endphp
		<div style="background: #eceff4;padding: 1.5rem; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">
			<table>
				<tr>
					<td>
						@if($logo != null)
							<img loading="lazy"  src="{{ uploaded_asset($logo) }}" height="40" style="display:inline-block;">
						@else
							<img loading="lazy"  src="{{ static_asset('assets/img/logo.png') }}" height="40" style="display:inline-block;">
						@endif
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td style="font-size: 1.2rem; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;" class="strong">Invoice</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ get_setting('contact_address') }}</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{  translate('Email') }}: {{ get_setting('contact_email') }}</td>
					<td class="text-right small"><span class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{  translate('Order ID') }}:</span> <span class="strong">{{ $order->code }}</span></td>
				</tr>
				<tr>
					<td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{  translate('Phone') }}: {{ get_setting('contact_phone') }}</td>
					<td class="text-right small"><span class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{  translate('Order Date') }}:</span> <span class=" strong" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ date('d-m-Y', $order->date) }}</span></td>
				</tr>
			</table>

		</div>

		<div style="padding: 1.5rem;padding-bottom: 0; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">
            <table>
				@php
					$shipping_address = json_decode($order->shipping_address);
				@endphp
				<tr><td class="strong small gry-color" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Bill to') }}:</td></tr>
				<tr><td class="strong" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ $shipping_address->name }}</td></tr>
				<tr><td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ $shipping_address->address }}, {{ $shipping_address->city }}, {{ $shipping_address->country }}</td></tr>
				<tr><td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Email') }}: {{ $shipping_address->email }}</td></tr>
				<tr><td class="gry-color small" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Phone') }}: {{ $shipping_address->phone }}</td></tr>
			</table>
		</div>

	    <div style="padding: 1.5rem;">
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr class="gry-color" style="background: #eceff4;">
	                    <th width="35%"style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Product Name') }}</th>
						<th width="15%" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Delivery Type') }}</th>
	                    <th width="10%" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Qty') }}</th>
	                    <th width="15%" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Unit Price') }}</th>
	                    <th width="10%" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Tax') }}</th>
	                    <th width="15%" class="text-right" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Total') }}</th>
	                </tr>
				</thead>
				<tbody class="strong">
	                @foreach ($order->orderDetails as $key => $orderDetail)
		                @if ($orderDetail->product != null)
							<tr class="">
								<td style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ $orderDetail->product->getTranslation('name') }} @if($orderDetail->variation != null) ({{ $orderDetail->variation }}) @endif</td>
								<td style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">
									@if ($order->shipping_type != null && $order->shipping_type == 'home_delivery')
										{{ translate('Home Delivery') }}
									@elseif ($order->shipping_type == 'pickup_point')
										@if ($order->pickup_point != null)
											{{ $order->pickup_point->getTranslation('name') }} ({{ translate('Pickip Point') }})
										@endif
									@endif
								</td>
								<td class="gry-color" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ $orderDetail->quantity }}</td>
								<td class="gry-color currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($orderDetail->price/$orderDetail->quantity) }}</td>
								<td class="gry-color currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($orderDetail->tax/$orderDetail->quantity) }}</td>
			                    <td class="text-right currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($orderDetail->price+$orderDetail->tax) }}</td>
							</tr>
		                @endif
					@endforeach
	            </tbody>
			</table>
		</div>

	    <div style="padding:0 1.5rem;">
	        <table style="width: 40%;margin-left:auto;" class="text-right sm-padding small strong">
		        <tbody>
			        <tr>
			            <th class="gry-color text-left" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Sub Total') }}</th>
			            <td class="currency">{{ single_price($order->orderDetails->sum('price')) }}</td>
			        </tr>
			        <tr>
			            <th class="gry-color text-left" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Shipping Cost') }}</th>
			            <td class="currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($order->orderDetails->sum('shipping_cost')) }}</td>
			        </tr>
			        <tr class="border-bottom">
			            <th class="gry-color text-left" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Total Tax') }}</th>
			            <td class="currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($order->orderDetails->sum('tax')) }}</td>
			        </tr>
                    <tr class="border-bottom">
			            <th class="gry-color text-left" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Coupon') }}</th>
			            <td class="currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($order->coupon_discount) }}</td>
			        </tr>
			        <tr>
			            <th class="text-left strong" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ translate('Grand Total') }}</th>
			            <td class="currency" style="font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif;">{{ single_price($order->grand_total) }}</td>
			        </tr>
		        </tbody>
		    </table>
	    </div>

	</div>
</body>
</html>
