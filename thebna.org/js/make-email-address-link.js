/*
    more info: http://www.pete.gontier.org/js/make-email-address-link.shtml
*/

function MakeEmailAddressLink (tld,domain,mailbox,link,subject,body)
{
    result = '<a href="mailto:' + escape (mailbox);
    result += '@' + escape (domain + '.' + tld);
    if (subject != null || body != null) result += '?';
    if (subject != null) result += 'Subject=' + escape (subject);
    if (subject != null && body != null) result += '&';
    if (body != null) result += 'Body=' + escape (body);
    return result + '">' + link + '</a>';
}

/*
    Copyright (c) 2002 Pete Gontier, All Rights Reserved.

    IMPORTANT: This software is supplied to you by Pete
    Gontier ("Pete") in consideration of your agreement to
    the following terms, and your use, installation,
    modification or redistribution of this software
    constitutes acceptance of these terms. If you do not
    agree with these terms, please do not use, install,
    modify or redistribute this software.

    In consideration of your agreement to abide by the
    following terms, and subject to these terms, Pete grants
    you a personal, non-exclusive license to use, reproduce,
    modify and redistribute this software, with or without
    modifications, in source and/or binary forms; provided
    that if you redistribute the software with
    modifications, you must remove this copyright notice and
    the following text and disclaimers in all such
    redistributions. The name Pete Gontier and/or this
    product may not be used to endorse or promote products
    derived from this software without specific pmyStyler
    written permission from Pete. Except as expressly stated
    in this notice, no other rights or licenses, express or
    implied, are granted by Pete herein, including but not
    limited to any patent rights that may be infringed by
    your derivative works or by other works in which the
    software may be incorporated.

    This software is provided by Pete on an "AS IS" basis. 
    PETE MAKES NO WARRANTIES, EXPRESS OR IMPLIED, INCLUDING
    WITHOUT LIMITATION THE IMPLIED WARRANTIES OF
    NON-INFRINGEMENT, MERCHANTABILITY AND FITNESS FOR A
    PARTICULAR PURPOSE, REGARDING THE SOFTWARE OR ITS USE
    AND OPERATION ALONE OR IN COMBINATION WITH YOUR
    PRODUCTS.

    IN NO EVENT SHALL PETE BE LIABLE FOR ANY SPECIAL,
    INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
    PROFITS; OR BUSINESS INTERRUPTION) ARISING IN ANY WAY
    OUT OF THE USE, REPRODUCTION, MODIFICATION AND/OR
    DISTRIBUTION OF THE SOFTWARE, HOWEVER CAUSED AND WHETHER
    UNDER THEORY OF CONTRACT, TORT (INCLUDING NEGLIGENCE),
    STRICT LIABILITY OR OTHERWISE, EVEN IF PETE HAS BEEN
    ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
