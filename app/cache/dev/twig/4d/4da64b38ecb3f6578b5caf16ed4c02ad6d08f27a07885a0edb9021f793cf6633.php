<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_2cad838583cf0a9bfc12c8ac38a55553c95bec9582edbf85800287d086f30f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1519b3c7359e38eec7c4e5015d029d3331a79c3405788b3a351d3951a27b5ba1 = $this->env->getExtension("native_profiler");
        $__internal_1519b3c7359e38eec7c4e5015d029d3331a79c3405788b3a351d3951a27b5ba1->enter($__internal_1519b3c7359e38eec7c4e5015d029d3331a79c3405788b3a351d3951a27b5ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_1519b3c7359e38eec7c4e5015d029d3331a79c3405788b3a351d3951a27b5ba1->leave($__internal_1519b3c7359e38eec7c4e5015d029d3331a79c3405788b3a351d3951a27b5ba1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */