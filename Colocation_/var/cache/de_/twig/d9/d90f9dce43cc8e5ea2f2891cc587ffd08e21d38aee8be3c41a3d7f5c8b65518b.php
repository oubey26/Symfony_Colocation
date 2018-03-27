<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_47eb9ea4fab603b3a2dec6385914eac2ed9729c3f672cdcdd35d02071c39c062 extends Twig_Template
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
        $__internal_2d5e37c6977769afeb19bb8eb3194f358ead9f5bc0b753adcc434b7c73f98d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5e37c6977769afeb19bb8eb3194f358ead9f5bc0b753adcc434b7c73f98d45->enter($__internal_2d5e37c6977769afeb19bb8eb3194f358ead9f5bc0b753adcc434b7c73f98d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b2263831791142896e4b5a3a4c846ebd60fba7d773f72e30ce5e595fed2282e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2263831791142896e4b5a3a4c846ebd60fba7d773f72e30ce5e595fed2282e1->enter($__internal_b2263831791142896e4b5a3a4c846ebd60fba7d773f72e30ce5e595fed2282e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2d5e37c6977769afeb19bb8eb3194f358ead9f5bc0b753adcc434b7c73f98d45->leave($__internal_2d5e37c6977769afeb19bb8eb3194f358ead9f5bc0b753adcc434b7c73f98d45_prof);

        
        $__internal_b2263831791142896e4b5a3a4c846ebd60fba7d773f72e30ce5e595fed2282e1->leave($__internal_b2263831791142896e4b5a3a4c846ebd60fba7d773f72e30ce5e595fed2282e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
