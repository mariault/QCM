<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_83c3db9bfa6d24fd696f75a1c2f1af38b914b9a4271315a5a654e5fe7b1dd1c0 extends Twig_Template
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
        $__internal_4e6872aaec78864ff44736541895af00a0333fcced3498dbe279bdc3e39c5ad8 = $this->env->getExtension("native_profiler");
        $__internal_4e6872aaec78864ff44736541895af00a0333fcced3498dbe279bdc3e39c5ad8->enter($__internal_4e6872aaec78864ff44736541895af00a0333fcced3498dbe279bdc3e39c5ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4e6872aaec78864ff44736541895af00a0333fcced3498dbe279bdc3e39c5ad8->leave($__internal_4e6872aaec78864ff44736541895af00a0333fcced3498dbe279bdc3e39c5ad8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
