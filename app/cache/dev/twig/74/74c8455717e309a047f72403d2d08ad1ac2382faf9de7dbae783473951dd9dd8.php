<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1526c04c681a8117e1bb788506c10e8f0f62f8dfd1d3aa05039769d8c2d353ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_160c428a0f25eb31058da260e9e28865aaaa1ef2975ef0ba9de407372ff30698 = $this->env->getExtension("native_profiler");
        $__internal_160c428a0f25eb31058da260e9e28865aaaa1ef2975ef0ba9de407372ff30698->enter($__internal_160c428a0f25eb31058da260e9e28865aaaa1ef2975ef0ba9de407372ff30698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160c428a0f25eb31058da260e9e28865aaaa1ef2975ef0ba9de407372ff30698->leave($__internal_160c428a0f25eb31058da260e9e28865aaaa1ef2975ef0ba9de407372ff30698_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51c337ca39802de26cba3f901f163b55a55960f495292f4d4b63f1066beff2bc = $this->env->getExtension("native_profiler");
        $__internal_51c337ca39802de26cba3f901f163b55a55960f495292f4d4b63f1066beff2bc->enter($__internal_51c337ca39802de26cba3f901f163b55a55960f495292f4d4b63f1066beff2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_51c337ca39802de26cba3f901f163b55a55960f495292f4d4b63f1066beff2bc->leave($__internal_51c337ca39802de26cba3f901f163b55a55960f495292f4d4b63f1066beff2bc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
