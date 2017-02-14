<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_bec12d2bd34faf498b9a5da5ac1a0a22eec9773b2f5642d82078547f3216dfa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_8f2e6a5bcb7087ffa3b56d24744b22bd0fe70aa19a83c7863982796eac01ac41 = $this->env->getExtension("native_profiler");
        $__internal_8f2e6a5bcb7087ffa3b56d24744b22bd0fe70aa19a83c7863982796eac01ac41->enter($__internal_8f2e6a5bcb7087ffa3b56d24744b22bd0fe70aa19a83c7863982796eac01ac41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2e6a5bcb7087ffa3b56d24744b22bd0fe70aa19a83c7863982796eac01ac41->leave($__internal_8f2e6a5bcb7087ffa3b56d24744b22bd0fe70aa19a83c7863982796eac01ac41_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c523b6c62861848d3a653fb2a860118ea49cd4a877fb351f6e2ee1676b93292a = $this->env->getExtension("native_profiler");
        $__internal_c523b6c62861848d3a653fb2a860118ea49cd4a877fb351f6e2ee1676b93292a->enter($__internal_c523b6c62861848d3a653fb2a860118ea49cd4a877fb351f6e2ee1676b93292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c523b6c62861848d3a653fb2a860118ea49cd4a877fb351f6e2ee1676b93292a->leave($__internal_c523b6c62861848d3a653fb2a860118ea49cd4a877fb351f6e2ee1676b93292a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
