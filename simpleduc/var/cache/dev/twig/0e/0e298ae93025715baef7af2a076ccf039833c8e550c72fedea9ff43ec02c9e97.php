<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8f426ea82f1e723e582df0d7af16e1b04204f317343c3bcb85134c200ca927fd extends Twig_Template
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
        $__internal_cb36184da081d1811d8d5afa2f7bd8cb8845d283a827e3a29ee7c7f33569a584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb36184da081d1811d8d5afa2f7bd8cb8845d283a827e3a29ee7c7f33569a584->enter($__internal_cb36184da081d1811d8d5afa2f7bd8cb8845d283a827e3a29ee7c7f33569a584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f71e23ac1fed1c2be5ea601869e59afe85d99087b5f8819427fe2b446d5c5f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71e23ac1fed1c2be5ea601869e59afe85d99087b5f8819427fe2b446d5c5f8d->enter($__internal_f71e23ac1fed1c2be5ea601869e59afe85d99087b5f8819427fe2b446d5c5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cb36184da081d1811d8d5afa2f7bd8cb8845d283a827e3a29ee7c7f33569a584->leave($__internal_cb36184da081d1811d8d5afa2f7bd8cb8845d283a827e3a29ee7c7f33569a584_prof);

        
        $__internal_f71e23ac1fed1c2be5ea601869e59afe85d99087b5f8819427fe2b446d5c5f8d->leave($__internal_f71e23ac1fed1c2be5ea601869e59afe85d99087b5f8819427fe2b446d5c5f8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
