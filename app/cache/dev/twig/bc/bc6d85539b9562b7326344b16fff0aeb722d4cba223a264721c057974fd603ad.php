<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7974b9a2867a352cbb4aa055eb6b85879cc307d36c9e6191768eb9fc771bc7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c43879b39e42ae98b0397951310723aefa48badaba9141e8436ac5358fd938 = $this->env->getExtension("native_profiler");
        $__internal_f1c43879b39e42ae98b0397951310723aefa48badaba9141e8436ac5358fd938->enter($__internal_f1c43879b39e42ae98b0397951310723aefa48badaba9141e8436ac5358fd938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c43879b39e42ae98b0397951310723aefa48badaba9141e8436ac5358fd938->leave($__internal_f1c43879b39e42ae98b0397951310723aefa48badaba9141e8436ac5358fd938_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_853fd7a596097a45e81e9f000028f7fa82e0fc5235b21319b9cdd4268dea06ff = $this->env->getExtension("native_profiler");
        $__internal_853fd7a596097a45e81e9f000028f7fa82e0fc5235b21319b9cdd4268dea06ff->enter($__internal_853fd7a596097a45e81e9f000028f7fa82e0fc5235b21319b9cdd4268dea06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_853fd7a596097a45e81e9f000028f7fa82e0fc5235b21319b9cdd4268dea06ff->leave($__internal_853fd7a596097a45e81e9f000028f7fa82e0fc5235b21319b9cdd4268dea06ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
